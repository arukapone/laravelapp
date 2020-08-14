@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
   @parent
   インデックスページ
@endsection

@section('content')

<html>
<head>
<title>shindan_input.php</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

<?php
$text = "HTML内でのPHPスクリプト実行処理";
echo "<p> $text </p>";
?>

<?php
$aryShindan = [];

$cnt = 1;
$aryShindan[$cnt]['question'] = '妻・夫、または彼女・彼氏がいる？';
$aryShindan[$cnt]['answer'][] = ['point' => 4, 'text' => 'いる'];
$aryShindan[$cnt]['answer'][] = ['point' => 3, 'text' => 'いたけど1年以内に分かれた'];
$aryShindan[$cnt]['answer'][] = ['point' => 2, 'text' => 'いたけど5年以内に分かれた'];
$aryShindan[$cnt]['answer'][] = ['point' => 1, 'text' => 'いない歴＝年齢'];

$cnt = 2;
$aryShindan[$cnt]['question'] = 'あなたのLINEの友達の人数は？';
$aryShindan[$cnt]['answer'][] = ['point' => 4, 'text' => '100人以上'];
$aryShindan[$cnt]['answer'][] = ['point' => 3, 'text' => '30～99人'];
$aryShindan[$cnt]['answer'][] = ['point' => 2, 'text' => '10～29人'];
$aryShindan[$cnt]['answer'][] = ['point' => 1, 'text' => '9人以下'];

$cnt = 3;
$aryShindan[$cnt]['question'] = '週ごとに友達とは何日会う？';
$aryShindan[$cnt]['answer'][] = ['point' => 4, 'text' => '3日以上'];
$aryShindan[$cnt]['answer'][] = ['point' => 3, 'text' => '2日'];
$aryShindan[$cnt]['answer'][] = ['point' => 2, 'text' => '1日'];
$aryShindan[$cnt]['answer'][] = ['point' => 1, 'text' => '1回も合わない日が多い'];

$cnt = 4;
$aryShindan[$cnt]['question'] = '年賀状は何枚届いた？';
$aryShindan[$cnt]['answer'][] = ['point' => 4, 'text' => '20枚以上'];
$aryShindan[$cnt]['answer'][] = ['point' => 3, 'text' => '10~19枚'];
$aryShindan[$cnt]['answer'][] = ['point' => 2, 'text' => '5~9枚'];
$aryShindan[$cnt]['answer'][] = ['point' => 1, 'text' => '4枚以下'];

$cnt = 5;
$aryShindan[$cnt]['question'] = 'あけおめLINEが届いた人数は？';
$aryShindan[$cnt]['answer'][] = ['point' => 4, 'text' => '20人以上'];
$aryShindan[$cnt]['answer'][] = ['point' => 3, 'text' => '10~19人'];
$aryShindan[$cnt]['answer'][] = ['point' => 2, 'text' => '5~9人'];
$aryShindan[$cnt]['answer'][] = ['point' => 1, 'text' => '4人以下'];
?>

<p>{{$tabata}}さん　こんにちは</p>
<p>まずはサンプルとして、簡単に<span class="bold">「リア充診断テスト」</span>を作ってみました。</p>
<hr>

<!--
<form method="post" action="shindan_result.php">
-->
<form method="post" action="../er">
@csrf
<?php foreach($aryShindan as $key1 => $val1){ ?>
	<!-- タイトル -->
	<p style="font-weight:bold;"><?php echo $key1.'.'.$val1['question'] ?></p>
	<?php foreach($val1['answer'] as $key2 => $val2){ ?>
	<!-- 選択肢のループ -->
	<div><label><input required type="radio" name="shindan<?php echo $key1 ?>" value="<?php echo $val2['point'] ?>"> <?php echo $val2['text'] ?></label></div>
	<?php } ?>
<?php } ?>
	<input class="bold" type="submit" value="回答する">
</form>

</hr>

</body>
</html>

<!--
   <p>ここが本文のコンテンツです。</p>
   <p>これは、<middleware>google.com</middleware>へのリンクです。</p>
   <p>これは、<middleware>yahoo.co.jp</middleware>へのリンクです。</p>
-->
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection