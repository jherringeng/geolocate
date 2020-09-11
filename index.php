<html>
  <head>
    <link rel="stylesheet" href="style_sheet.css">
  </head>
<body>

<section>
  <h1>Geolocation</h1>
  <form action="geolocate.php" method="post">
    <h2>Please enter a location</h2>
      <table>
      <tr>
        <td><label for="q">Name: </label></td>
        <td><input type="text" name="q" id="q" required></td>
      </tr>
      <tr>
        <td><label for="lang">Language:</label></td>
        <td><select name="lang" id="lang">
          <option value="en">English</option>
          <option value="es">Spanish</option>
          <option value="fr">French</option>
          <option value="de">German</option>
        </select></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit"></td>
      </tr>
    <table>
  </form>
</section>
</body>
</html>
