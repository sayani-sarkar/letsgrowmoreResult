<?PHP
include("ck.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Responsive Contact Us Form | CampCodes</title>
    <link rel="stylesheet" href="addexam.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
  <form name="main" method="post" action="addexamv.php">
    <div class="container">
      <div class="text">Responsive Contact Us Form</div>
      <form action="#">
        <div class="form-row">
          <div class="input-data">
            <input type="text" id="exanm" name="exanm" required>
            <div class="underline"></div>
            <label for="">Name of the exam</label>
          </div><br><br><br>
          <div class="input-data">
            <input type="datetime-local" id="datetime" name="datetime" required>
            <div class="underline"></div>
            <label for=""></label>
          </div>
        </div><br><br><br>
        <div class="form-row">
          <div class="input-data" >
            <input type="text" id="mailadres" name="mailadres" required>
            <div class="underline"></div>
            <label for="">Email Address</label>
          </div><br><br><br>
          <div class="input-data">
            <input type="text" id="type" name="type" required>
            <div class="underline"></div>
            <label for="">Type Of Exam</label>
          </div>
        </div><br><br><br>
        <div class="form-row">
          <div class="input-data textarea">
            <textarea rows="8" cols="80"  id="msg" name="msg" required></textarea>
            <div class="underline"></div>
            <label for="">Write your message</label>
          </div>
        </div><br><br><br>
        <div class="form-row submit-btn">
          <div class="input-data">
            <div class="inner"></div>
            <input type="submit" value="submit">
          </div>
        </div>
      </form>
    </div>

  </body>
</html>