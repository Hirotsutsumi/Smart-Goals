/*!SIE under the MIT Lisence
 */
/*! Copyright 2016 dhrname and other contributors
 * http://sie.osdn.jp/
 *
 * Permission is hereby granted, free of charge, to any person obtaining
 * a copy of this software and associated documentation files (the
 * "Software"), to deal in the Software without restriction, including
 * without limitation the rights to use, copy, modify, merge, publish,
 * distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to
 * the following conditions:
 * 
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
 * LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
 * OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
 * WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */


(function(){

/*本体オブジェクト。base関数の裏に隠蔽されている*/
var _base = {
    
    /*_base.objはbase関数やupメソッドで呼び出されるオブジェクトの始祖となるオブジェクト*/
    obj: {
      /*upメソッド
       * 自身をプロトタイプとして、新たにオブジェクトを生成する
       */
      up: function(name) {
        var s = Object.create(this);
        if (name) {
          this[name] = s;
          s.up = this.up;
        } else {
          /*既定値を$1としておく*/
          this.$1 = s;
        }
        return s;
      },
    
      /*mixメソッド
       * 別のオブジェクトと合成ができるメソッド
       */
      mix: function(obj) {
        if (!obj) {
          throw new Error("No arguments error");
        }
        if (typeof obj !== "function") {
          var alias = _base.__ng_;
          for (var i in obj) {
            if (!alias[i]) {
              /*hasOwnPropertyメソッドを使わないのは、プロトタイプチェーンをたどるようにするため
               *なお、Object.prototypeのプロパティなどは外した方がエラーがおきにくい
               */
              this[i] = obj[i];
            }
          }
          i = alias = void 0;
        } else {
          obj.call(this, this);
        }
        return this;
      },
    
      /*onメソッド
       * メソッドの合成ができるメソッド。
       * 指定した名前nameのメソッドが呼び出された場合、便乗して指定関数funcをメソッドとして実行することができる
       */
      on: function(name, func) {
        if (!name) {
          throw new Error("No arguments error");
        } else if (/^(?:up|on|mix|of)$/.test(name)) {
          throw new Error("Invalid method name error");
        } else if (typeof func !== "function") {
          throw new Error("Not support arguments type");
        }
        var tev = this._eventList__,
            tn = this[name];
        if (!this._eventList__) {
          tev = this._eventList__ = [];
        } else if (!this.hasOwnProperty("_eventList__")) { //祖先がすでにonメソッドを呼び出していれば
          var s = [];
          s._parent = tev;
          tev = this._eventList__ = s;
          s = void 0;
        }
        if (!this[name] || !tn.isOn) { //まだ、onメソッドが呼び出されていなければ
          /*nameで指定されたメソッドの初期化*/
          if (typeof tn === "function") {
            /*nameで指定されたメソッドがすでにある場合は、配列tevの親をたどれないようにしておく*/
            tev.push({
                name: name,
                func: tn
              });
            tev._parent = null;
          }
          this[name] = function() {
            var te = this._eventList__,
                 _name = name,    //スコープチェーンのエイリアス
                 ts = null,
                 s = null,
                 tp,
                 isCalled = false;//返り値の制御で使う
            te._child = null;
            while (tp = te._parent) { //親をさかのぼっていく
              tp._child = te;
              te = tp;
            }
            while (te) {            //子をたどっていく
              /*最初の返り値の結果はsとして記録して、後で返す*/
              for (var i=0, tli=te.length;i<tli;++i) {
                if(te[i].name === _name) {
                  ts = te[i].func.apply(this, arguments);
                  if (!isCalled) {
                    s = ts;
                    isCalled = true;
                  }
                }
              }
              te = te._child;
            }
            te = ts = _name = isCalled = void 0;
            return s;
          };
          this[name].isOn = true;
        }
        tev.push({
                name: name,
                func: func
              });
        tev = tn = func= void 0;
        return this;
      },

      /*__argsと__appプロパティは後のofメソッドで使う*/
      __args: [],
      __app: null,

      /*ofメソッド
       *　指定されたオブジェクトのプロパティを遅延処理で実行できるメソッド
       * 後述のcallメソッドと組み合わせて使う
       */
       of: function(obj) {
        if (!obj) {
          throw new Error("No arguments error");
        } else if(this.hasOwnProperty("__of")) {
          /*再代入禁止*/
          throw new Error("Reset error");
        }
        /*__argsプロパティを新しい配列に再構成*/
        var args = [].concat(this.__args || []);
        var name;
        for (var i in obj) {
          if(obj.hasOwnProperty(i) && (i !== "call")) {
            if (obj[i] && obj[i].call) {
              /*callメソッドを持っている場合は、obj.methodではなく、
               * obj.method__に登録させる*/
               name = i+ "__";
               /*一度登録されたプロパティは二度書きしないようにする*/
               args[i] || args.push(i);

            } else {
              name = i;
            }
            args[i] = this[name] = obj[i];
          }
        }
        obj.call && (this.__app = { call: obj.call });
        this.__args = args;
        this.__of = 1;
        args = i = obj = void 0;
        return this;
       },

      /*callメソッドが呼び出されたかどうか*/
      __isCallByBASE: false,
      
      /*callメソッド
       *　ofメソッドで指定されているオブジェクトのcallメソッドを実行できるメソッド
       * そのさい、オブジェクトのプロパティとメソッドは、自動で実行展開される
       */
       call: function() {
         if (!this.__app) { //ofメソッドが呼び出されていないか、callメソッドが一度も設定されていない場合
           return this;
         } else if (this.hasOwnProperty("__isCallByBASE")) {
           /*一度、callメソッドが呼び出されると、プロパティとメソッドの自動展開はしない*/
           return this.__app.call.apply(this, arguments);
         }
         this.__isCallByBASE = true;
         var args = this.__args
         for (var i=0, ali=args.length;i<ali;++i) {
           /*callメソッドがあるオブジェクトは展開*/
           var ai = args[i];
           this[ai] = this[ai+ "__"].call(this);
         }
         args = ai = argi = void 0;
         return this.__app.call.apply(this, arguments);
       },
       callFunc: function() { return this; },
       
      /*評価の初期化。callメソッドを使うときに再評価ができる*/
      initToEval: function() {
        delete this.__isCallByBASE;
        return this;
      }
    }
};
/*base関数でキャッシュとして使うオブジェクト*/
var baseCache = {};

base = function (name) {
    var __base = _base,
         _cache = baseCache; //エイリアス作成
    if (!name) {
      throw new Error("No arguments error");
    } else if (_cache[name]) {
      /*キャッシュに登録されている場合は、登録されたオブジェクトを返す*/
      return _cache[name];
    } else {
      var s = Object.create(__base.obj);
      this[name] = _cache[name] = s;
      /*自身が値であるようなプロパティを設定する*/
      s[name] = s;
      return s;
    }
};


/*mixメソッドで使うNGハッシュを作成*/
var hash = {},
    proto = Object.prototype;
for (var i in proto) {
  hash[i] = true;
  /*上記のキャッシュについて、すべてのプロパティをnullかundefinedにしておく*/
  baseCache[i] = null;
}
hash.constructor = false; //constructorはNGハッシュに追加しない
_base.__ng_ = hash;
hash = proto = void 0;

/*base.free関数
 *  即時関数の内部で作っていおいたオブジェクトを解放させるための関数
 */
base.free = function() {
  delete _base.obj;
  _base = baseCache = callFunc = void 0;
};

/*IE8などObject.createをサポートしていないブラウザ用*/
Object.create || (Object.create = function(obj) {
  var F = function() {};
  F.prototype = obj;
  return new F()
} );
})();

 $(function() {
  // チェックボックスのクリックを無効化します。
  $('.image-box .disabled_checkbox').click(function() {
    return false;
  });

  // 画像がクリックされた時の処理です。
  $('img.thumbnail').click(function() {
    var $container = $('.container');

    // 現在の選択を解除します。
    $container.find('img.thumbnail.checked').removeClass('checked');

    // チェックを入れた状態にします。
    $(this).addClass('checked');
  });
});