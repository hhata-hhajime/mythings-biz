<html>
<head>
<meta charset="utf-8">
</head>
<body>
<div class="wrap">
<span class="yconnectLogin"></span>
</div>
<script type="text/javascript">
window.yconnectInit = function() {
	YAHOO.JP.yconnect.Authorization.init({
		button: {
			format: "image",
			type: "a",
			textType:"a",
			width: 196,
			height: 38,
			className: "yconnectLogin"
		},
		authorization: {
			clientId: "dj0zaiZpPXlWdGpXUGZzSm1JRiZzPWNvbnN1bWVyc2VjcmV0Jng9OTc-",
			redirectUri: "https://mythings-developers.biz.yahoo.co.jp/sample/confirm",
			scope: "",
			state: "e457e2f794481176750218d36921e193",
			nonce: "fef99d8d1702952933a2f567f06b9d67",
			windowWidth: "500",
			windowHeight: "400"
		},
		onError: function(res) {
			// エラー発生時のコールバック関数
		},
		onCancel: function(res) {
			// 同意キャンセルされた時のコールバック関数
		}
	});
};
(function(){
var fs = document.getElementsByTagName("script")[0], s = document.createElement("script");
s.setAttribute("src", "https://s.yimg.jp/images/login/yconnect/auth/1.0.3/auth-min.js");
fs.parentNode.insertBefore(s, fs);
})();
</script>
<style type="text/css">body{margin:0;padding:0;position:absolute;top:0;right:0;bottom:0;left:0}.wrap,body,html{width:100%;height:100%}.wrap{width:200px;height:60px;position:absolute;top:50%;left:50%;margin-top:-30px;margin-left:-75pt}</style>

</body>
</html>
