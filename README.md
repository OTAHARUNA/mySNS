# 生徒と管理者の出席管理ツール。
生徒の予約画面（出席する画面や予約している講座の確認）



## 一部ツイッターAPI機能を搭載している。
■自動リロード機能
1. HTMLタグに盛り込む。
コミット：7ddb8d0d55c53a483356716d440a3fb877df3087
```html
<meta http-equiv="refresh" content="30; URL=/twitter">
```

1. JSで実装
コミット：cb28ebf93d04252e8c96229bd58e4b7f91b5fe5c
```javascript
<script>
   const timer = 5000 // ミリ秒で間隔の時間を指定
   window.addEventListener('load', function() {
      setInterval('location.reload()', timer);
   });
</script>
```
