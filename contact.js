// タブ
//任意のタブにURLからリンクするための設定
function GethashID (hashIDName){
	if(hashIDName){
		//タブ設定
		$('.tab li').find('a').each(function() { //タブ内のaタグ全てを取得
			var idName = $(this).attr('href'); //タブ内のaタグのリンク名（例）#lunchの値を取得	
			if(idName == hashIDName){ //リンク元の指定されたURLのハッシュタグ（例）http://example.com/#lunch←この#の値とタブ内のリンク名（例）#lunchが同じかをチェック
				var parentElm = $(this).parent(); //タブ内のaタグの親要素（li）を取得
				$('.tab li').removeClass("_on"); //タブ内のliについているactiveクラスを取り除き
				$(parentElm).addClass("_on"); //リンク元の指定されたURLのハッシュタグとタブ内のリンク名が同じであれば、liにactiveクラスを追加
				//表示させるエリア設定
				$(".area").removeClass("active"); //もともとついているis-activeクラスを取り除き
				$(hashIDName).addClass("active"); //表示させたいエリアのタブリンク名をクリックしたら、表示エリアにis-activeクラスを追加	
			}
		});
	}
}

//タブをクリックしたら
$('.tab a').on('click', function() {
	var idName = $(this).attr('href'); //タブ内のリンク名を取得	
	GethashID (idName);//設定したタブの読み込みと
	return false;//aタグを無効にする
});


// 上記の動きをページが読み込まれたらすぐに動かす
$(window).on('load', function () {
    $('.tab li:first-of-type').addClass("_on"); //最初のliにactiveクラスを追加
    $('.area:first-of-type').addClass("active"); //最初の.areaにis-activeクラスを追加
	var hashName = location.hash; //リンク元の指定されたURLのハッシュタグを取得
	GethashID (hashName);//設定したタブの読み込み
});

// アコーディオン
//アコーディオンをクリックした時の動作
$('.title').on('click', function() {//タイトル要素をクリックしたら
	$('.box').slideUp(300);//クラス名.boxがついたすべてのアコーディオンを閉じる
    
	var findElm = $(this).next(".box");//タイトル直後のアコーディオンを行うエリアを取得
    
	if($(this).hasClass('close')){//タイトル要素にクラス名closeがあれば
		$(this).removeClass('close');//クラス名を除去    
	}else{//それ以外は
		$('.close').removeClass('close'); //クラス名closeを全て除去した後
		$(this).addClass('close');//クリックしたタイトルにクラス名closeを付与し
		$(findElm).slideDown(300);//アコーディオンを開く
	}
});

$(".title").click(function () {
  $(this).find("._plus").toggleClass('active');
});

// スクロールしたらフワッと
// 動きのきっかけとなるアニメーションの名前を定義
function fadeAnime(){

	//ふわっと動くきっかけのクラス名と動きのクラス名の設定
	$('.fadeUpTrigger').each(function(){ //fadeInUpTriggerというクラス名が
		var elemPos = $(this).offset().top-50; //要素より、50px上の
		var scroll = $(window).scrollTop();
		var windowHeight = $(window).height();
		if (scroll >= elemPos - windowHeight){
			$(this).addClass('fadeUp');
			// 画面内に入ったらfadeInというクラス名を追記
		}else{
			$(this).removeClass('fadeUp');
			// 画面外に出たらfadeInというクラス名を外す
		}
	});
	
	//関数でまとめることでこの後に違う動きを追加することが出来ます
	$('.fadeDownTrigger').each(function(){ //fadeInDownTriggerというクラス名が
		var elemPos = $(this).offset().top-50; //要素より、50px上の
		var scroll = $(window).scrollTop();
		var windowHeight = $(window).height();
		if (scroll >= elemPos - windowHeight){
			$(this).addClass('fadeDown');
			// 画面内に入ったらfadeDownというクラス名を追記
		}else{
			$(this).removeClass('fadeDown');
			// 画面外に出たらfadeDownというクラス名を外す
		}
	});
}//ここまでふわっと動くきっかけのクラス名と動きのクラス名の設定

// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function (){
	fadeAnime();/* アニメーション用の関数を呼ぶ*/
});// ここまで画面をスクロールをしたら動かしたい場合の記述
	
$(document).ready(function(){
  $(".search").on("keyup", function() {
    var value = $(this).val().toUpperCase();
    $(".active li").each(function() {
      var text = $(this).text().toUpperCase();
      $(this).toggle(text.indexOf(value) > -1);
    });
  });
});

$(document).ready(function(){
  $(".all_button").click(function(){
    var formData = $("form").serialize();
    $.ajax({
      type: "POST",
      url: "contact.php",
      data: formData,
      success: function(response) {
        alert(response);
      }
    });
  });
});
