{{$name}} さま<br><br>

会社名: {{$company}}<br>

役職: {{$title}}<br>

お名前: {{$name}}<br>

<?php if(isset($furigana)) echo 'ふりがな: '. $furigana;?><br>

ご住所: {{$address}}<br>

電話番号: {{$phone}}<br>

メールアドレス: {{$email}}<br>

お問い合わせ内容: <?php echo nl2br($comment);?><br><br><br>


<?php echo nl2br($signature);?><br>