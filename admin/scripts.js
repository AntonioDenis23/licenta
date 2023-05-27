async function submitFormAddCandidates(event) {
  event.preventDefault();
  let firstName = document.getElementById("firstName").value;
  let lastName = document.getElementById("lastName").value;
  let job = document.getElementById("job").value;
  let about = document.getElementById("about").value;
  let electionId = document.getElementById("electionId").value;
  debugger;
  try {
    let resonse = await fetch("http://localhost:5050/addCandidate", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({
        firstName: firstName,
        lastName: lastName,
        job: job,
        about: about,
        electionId: electionId,
      }),
    });
    sessionStorage.setItem("msg", "Candidat creat");
    window.location.replace(`view.php`);
  } catch (error) {
    alert(error);
    return;
  }
}

async function submitFormAddAlegere(event) {
  event.preventDefault();
  debugger;
  let name = document.getElementById("name-alegere").value;
  try {
    let resonse = await fetch("http://localhost:5050/addElection", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({
        electionName: name,
      }),
    });
    window.location.replace(`view.php`);
  } catch (error) {
    alert(error);
    return;
  }
}
