# 生徒と管理者の出席管理ツール。
生徒の予約画面（出席する画面や予約している講座の確認）



## 一部ツイッターAPI機能を搭載している。
■自動リロード機能
1. HTMLタグに盛り込む。
```html
<meta http-equiv="refresh" content="30; URL=/twitter">
```

2. JSで実装
```javascript
<script>
   const timer = 5000 // ミリ秒で間隔の時間を指定
   window.addEventListener('load', function() {
      setInterval('location.reload()', timer);
   });
</script>
```
