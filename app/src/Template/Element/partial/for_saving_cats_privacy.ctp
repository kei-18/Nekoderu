<?php if(is_null($this->request->session()->read('Notify_CatsPrivacy'))): ?>
<link rel="stylesheet" href="/css/w3.css">
<style>
.w3-note{background-color:#ffffcc;border-left:6px solid #ffeb3b}
.w3-warning{background-color:#ffdddd;border-left:6px solid #f44336}
.w3-info{background-color:#ddffdd;border-left:6px solid #4CAF50}
</style>
<div id="for-saving-cats-privacy-panel" class="w3-panel w3-note">
    <h3>おねがい</h3>
    <p>
        写真やコメントを投稿する際は猫ちゃんの居場所がわからないようご配慮ください。
        居場所がわかると心無い人たちに猫ちゃんの生活が脅かされてしまう危険があります。
    </p>
    <p>
        ※ 「２．場所を設定する」で入力していただいた内容は一般に公開しませんのでご安心ください。
    </p>
    
    <p>
        ご協力よろしくお願いいたします。
    </p>
    <div class="btn btn btn-default" style="margin-bottom:10px"><a id="for-saving-cats-privacy" href="#">確認しました<a></a></div>
</div>

<script>
    $('#for-saving-cats-privacy').click(function(e){
        e.preventDefault();
        $.get({
            url: "/cats/readNotification/"+"Notify_CatsPrivacy"+".json",
        }).done(function(data){
            $("#for-saving-cats-privacy-panel").slideUp(1000);
        });
    });
</script>
<?php endif; ?>