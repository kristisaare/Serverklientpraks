<?php $bg_color="#fff";
if (isset($_GET['backgroundcolor']) && $_GET['backgroundcolor'] !="")
 {
  $bg_color=htmlspecialchars($_GET['backgroundcolor']);
}
?>
<?php
if (isset($_GET['textcolor']) && $_GET['textcolor'] !="")
 {
  $text_color=htmlspecialchars($_GET['textcolor']);
} else {
  $text_color="#000000";
}
?>
<?php
if (isset($_GET['comment']) && $_GET['comment'] !="")
{
  $comment=htmlspecialchars($_GET['comment']);
} else {
  $comment="Näidistekst";
} ?>

<!DOCTYPE html>
<head>
      <meta charset="utf-8"/>
      <title> Kommentaari kirjutamine </title>

<style type="text/css">
#testbox {
  width: 250px;
  height: 100px;
  border: 1px;
  border: black;
  border-style: solid;
  background: <?php echo $bg_color; ?>;
  font: <?php echo $text_color; ?>;
}
</style>

</head>
<body>

  <div id="testbox">
  <?php echo "{$comment}"; ?>
  </div>
  <br>
  <br>



  <form action="vorm.php" method="GET">

  <textarea name="comment" cols="40" rows="8" placeholder="Näidistekst"></textarea>
  <br>
  <label> Teksti värvus </label>
  <input type="color" name="textcolor">
  <br>
  <label> Tausta värvus </label>
  <input type="color" name="backgroundcolor">
  <br>
  <button type="submit">Saada vastused</button>

  </form>






</body>
</html>
