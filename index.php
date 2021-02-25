<<<<<<< HEAD
<?php
    include "connection.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0,viewport-fit=cover"
    />
    <title>5 ส. โรงพยาบาลเขาสมิง</title>
    <link rel="stylesheet" href="css/style.css" media="all" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
      crossorigin="anonymous"
    />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&display=swap" rel="stylesheet" />

<style>
body {
font-family: 'Kanit', sans-serif;
}
</style>

  </head>

  <body>
    <!-- Image and text -->
    <nav class="navbar navbar-dark bg-success">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img
            src="css/khaosaming.png"
            alt=""
            width="40"
            height="40"
            class="d-inline-block align-top"
          />
          5 ส. โรงพยาบาลเขาสมิง
        </a>
      </div>
    </nav>

    <div class="container">

      <form action="5khaosaming.php" method="post" enctype="multipart/form-data">  
        <br />
        <br />
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label"
            >เเจ้งเรื่อง</label
          >
          <textarea
            name="title"
            class="form-control"
            id="exampleFormControlTextarea1"
            rows="3"
          ></textarea>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label"
            >คำเเนะนำ</label
          >
          <textarea
            name="title1"
            class="form-control"
            id="exampleFormControlTextarea1"
            rows="3"
          ></textarea>
        </div>

        <div>
          <label for="formFileLg" class="form-label">เลือกรูปภาพ</label>
          <input
            class="form-control form-control-lg"
            id="formFileLg"
            type="file"
            name="file"
          />
        </div>

        <br />

        <div class="d-grid gap-2">
          <button class="btn btn-primary" type="submit" name="submit" id="btnMsg" onclick="sendMsg()">บันทึก</button>
          <button class="btn btn-secondary" type="button" id="btnClose" onclick="closed()">ยกเลิก</button>
        </div>
      </from>
    </div>


    <p id="os"><b>OS:</b></p>
    <p id="language"><b>Language:</b></p>
    <p id="version"><b>Version:</b></p>
    <p id="isInClient"><b>isInClient:</b></p>
    <p id="accessToken"><b>AccessToken:</b></p>
    <img id="pictureUrl" />
    <p id="userId"><b>userId:</b></p>
    <p id="displayName"><b>displayName:</b></p>
    <p id="type"><b>type:</b></p>
    <p id="viewType"><b>viewType:</b></p>
    <p id="utouId"><b>utouId:</b></p>
    <p id="roomId"><b>roomId:</b></p>
    <p id="groupId"><b>groupId:</b></p>

 <input id="Id">
 <p id="Id">

    <!-- <script src="js/vconsole.min.js"></script> -->

    <script src="https://static.line-scdn.net/liff/edge/versions/2.8.0/sdk.js"></script>
    <script>
      async function sendMsg() {
        if (liff.getContext().type !== "none") {
          await liff.sendMessages([
            {
              type: "sticker",
              stickerId: 1,
              packageId: 1
            }
          ]);
          alert("Message sent");
        }
      }

    //   function fncInsert () 
    //   {
    //     $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com')";

    //     if (mysqli_query($conn, $sql)) {
    //     echo "New record created successfully";
    //     } else {
    //     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    //     }
    //   }

      function getContext() {
        document.getElementById("type").append(liff.getContext().type);
        document.getElementById("viewType").append(liff.getContext().viewType);
        document.getElementById("utouId").append(liff.getContext().utouId);
        document.getElementById("roomId").append(liff.getContext().roomId);
        document.getElementById("groupId").append(liff.getContext().groupId);
      }

      async function getUserProfile() {
        const profile = await liff.getProfile();
        document.getElementById("pictureUrl").src = profile.pictureUrl;
        document.getElementById("userId").append(profile.userId);
        document.getElementById("displayName").append(profile.displayName);

        document.getElementById("Id").textContent = profile.userId;
      }

      function getEnvironment() {
        document.getElementById("os").append(liff.getOS());
        document.getElementById("language").append(liff.getLanguage());
        document.getElementById("version").append(liff.getVersion());
        document.getElementById("accessToken").append(liff.getAccessToken());
        document.getElementById("isInClient").append(liff.isInClient());
      }

      async function main() {
        await liff.init({ liffId: "1655676225-KWLnYejZ" });
        getEnvironment();
        getUserProfile();
        getContext();
      }
      main();
    </script>
  </body>
</html>
=======
<?php
    include "connection.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0,viewport-fit=cover"
    />
    <title>5 ส. โรงพยาบาลเขาสมิง</title>
    <link rel="stylesheet" href="css/style.css" media="all" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
      crossorigin="anonymous"
    />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&display=swap" rel="stylesheet" />

<style>
body {
font-family: 'Kanit', sans-serif;
}
</style>

  </head>

  <body>
    <!-- Image and text -->
    <nav class="navbar navbar-dark bg-success">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img
            src="css/khaosaming.png"
            alt=""
            width="40"
            height="40"
            class="d-inline-block align-top"
          />
          5 ส. โรงพยาบาลเขาสมิง
        </a>
      </div>
    </nav>

    <div class="container">

      <form action="5khaosaming.php" method="post" enctype="multipart/form-data">  
        <br />
        <br />
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label"
            >เเจ้งเรื่อง</label
          >
          <textarea
            name="title"
            class="form-control"
            id="exampleFormControlTextarea1"
            rows="3"
          ></textarea>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label"
            >คำเเนะนำ</label
          >
          <textarea
            name="title1"
            class="form-control"
            id="exampleFormControlTextarea1"
            rows="3"
          ></textarea>
        </div>

        <div>
          <label for="formFileLg" class="form-label">เลือกรูปภาพ</label>
          <input
            class="form-control form-control-lg"
            id="formFileLg"
            type="file"
            name="file"
          />
        </div>

        <br />

        <div class="d-grid gap-2">
          <button class="btn btn-primary" type="submit" name="submit" id="btnMsg" onclick="sendMsg()">บันทึก</button>
          <button class="btn btn-secondary" type="button" id="btnClose" onclick="closed()">ยกเลิก</button>
        </div>
      </from>
    </div>


    <p id="os"><b>OS:</b></p>
    <p id="language"><b>Language:</b></p>
    <p id="version"><b>Version:</b></p>
    <p id="isInClient"><b>isInClient:</b></p>
    <p id="accessToken"><b>AccessToken:</b></p>
    <img id="pictureUrl" />
    <p id="userId"><b>userId:</b></p>
    <p id="displayName"><b>displayName:</b></p>
    <p id="type"><b>type:</b></p>
    <p id="viewType"><b>viewType:</b></p>
    <p id="utouId"><b>utouId:</b></p>
    <p id="roomId"><b>roomId:</b></p>
    <p id="groupId"><b>groupId:</b></p>

 <input id="Id">
 <p id="Id">

    <!-- <script src="js/vconsole.min.js"></script> -->

    <script src="https://static.line-scdn.net/liff/edge/versions/2.8.0/sdk.js"></script>
    <script>
      async function sendMsg() {
        if (liff.getContext().type !== "none") {
          await liff.sendMessages([
            {
              type: "sticker",
              stickerId: 1,
              packageId: 1
            }
          ]);
          alert("Message sent");
        }
      }

    //   function fncInsert () 
    //   {
    //     $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com')";

    //     if (mysqli_query($conn, $sql)) {
    //     echo "New record created successfully";
    //     } else {
    //     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    //     }
    //   }

      function getContext() {
        document.getElementById("type").append(liff.getContext().type);
        document.getElementById("viewType").append(liff.getContext().viewType);
        document.getElementById("utouId").append(liff.getContext().utouId);
        document.getElementById("roomId").append(liff.getContext().roomId);
        document.getElementById("groupId").append(liff.getContext().groupId);
      }

      async function getUserProfile() {
        const profile = await liff.getProfile();
        document.getElementById("pictureUrl").src = profile.pictureUrl;
        document.getElementById("userId").append(profile.userId);
        document.getElementById("displayName").append(profile.displayName);

        document.getElementById("Id").textContent = profile.userId;
      }

      function getEnvironment() {
        document.getElementById("os").append(liff.getOS());
        document.getElementById("language").append(liff.getLanguage());
        document.getElementById("version").append(liff.getVersion());
        document.getElementById("accessToken").append(liff.getAccessToken());
        document.getElementById("isInClient").append(liff.isInClient());
      }

      async function main() {
        await liff.init({ liffId: "1655676225-KWLnYejZ" });
        getEnvironment();
        getUserProfile();
        getContext();
      }
      main();
    </script>
  </body>
</html>
>>>>>>> 9158edf8aa93d64c6ac2890ed8e42054803d6a3e
