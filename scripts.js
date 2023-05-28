async function submitForm(event) {
  event.preventDefault();
  let username = document.getElementById("form2Example1").value;
  let password = document.getElementById("form2Example2").value;

  try {
    let resonse = await fetch("http://localhost:5050/login", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({
        userName: username,
        password: password,
      }),
    });
    let resonseData = await resonse.json();
    if (resonseData) {
      document.cookie = `username=${username}`;

      //Redirect
      window.location.replace(
        `pagina-cont-utilizator.php?username=${username}`
      );
    } else {
      throw resonseData.error || "Nume sau parolă gresite";
    }
  } catch (error) {
    alert(error);
    return;
  }
}

async function submitFormRegister(event) {
  event.preventDefault();
  let agree = document.getElementById("agree");

  if (!agree.checked) {
    alert("Please agree with Terms of service");
    return;
  }

  let password = document.getElementById("password").value;
  let passwordr = document.getElementById("passwordr").value;

  if (password !== passwordr) {
    alert("Parolele nu se potrivesc");
    return;
  }
  let username = document.getElementById("username").value;
  let fname = document.getElementById("fname").value;
  let lname = document.getElementById("lname").value;
  let mail = document.getElementById("mail").value;
  let number = document.getElementById("number").value;

  if (username == "" || mail == "" || password == "" || passwordr == "") {
    alert("Filed required (*) found empty");
    return;
  }
  try {
    let resonse = await fetch("http://localhost:5050/register", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({
        userName: username,
        firstName: fname,
        name: lname,
        eMail: mail,
        tel: number,
        password: password,
      }),
    });

    const resonseData = await resonse;

    if (resonse.status == 200) {
      document.cookie = `username=${username}`;
      //Redirect
      window.location.replace(
        `pagina-cont-utilizator.php?username=${username}`
      );
    } else if (resonse.status == 208) {
      alert("Alege alt username");
      //Redirect
    } else {
      throw resonseData.error || "Ceva a mers prost";
    }
  } catch (error) {
    alert(error);
  }
}
