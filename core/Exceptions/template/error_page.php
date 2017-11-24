<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8/>
    <title></title>


</head>

<style>

    .well {
        margin: 0px auto;
        width: 50%;
        background: whitesmoke;
        border: 1px solid grey;
        font-family: "Courier New", Courier, monospace;
    }
    body{

        margin: 0px;
        padding: 0px;
    }
    header{

        width: 100%;

    }
    header h1{
        word-spacing: 3px;
        color: #aa947f;
        font-family: "Courier New", Courier, monospace;
        border-bottom: 1px solid floralwhite;
        margin: 0px auto;

    }
    .well h1{

        word-spacing: 3px;
        color: #aa947f;
        font-family: "Courier New", Courier, monospace;
    }

    body {

        background: #f9f8f8
    }
</style>
<body>
<header>
  <center>  <h1>Bouge ta boite (Dev mode)</h1></center>

</header>
<div class="well">

    <h1>Error Reporting:</h1>
    <p><?php echo $errorExplain; ?></p>
</div>


</body>