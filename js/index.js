function ValidateForm() {
  var botPage = document.getElementById("botPage");
  var botCat = document.getElementById("botCat");
  
  if (submitButton.id === "PageSubmit") {
    if (botPage.value.trim() === "") {
      botPage.classList.add("error");
      submitButton.disabled = "disabled";
      return false;
    }
    document.getElementById("PageSpinner").style.display = "inline-block";
  } else if (submitButton.id === "CatSubmit") {
    if (botCat.value.trim() === "") {
      botCat.classList.add("error");
      submitButton.disabled = "disabled";
      return false;
    }
    document.getElementById("CatSpinner").style.display = "inline-block";
  }
  document.getElementById("PageSubmit").disabled = "disabled";
  document.getElementById("CatSubmit").disabled = "disabled";
  return true;
}

function ValidatePageName() {
  document.getElementById("PageSubmit").innerHTML = "Process page" +
    ((document.getElementById("botPage").value.indexOf("|") > -1) ? "s" : "");
  if (this.value.trim() === "") {
    this.classList.add("error");
    document.getElementById("PageSubmit").disabled = "disabled";
  } else {
    this.classList.remove("error");
    document.getElementById("PageSubmit").disabled = false;
  }
}

function ValidateCategory() {
  if (this.value.trim() === "") {
    this.classList.add("error");
    document.getElementById("CatSubmit").disabled = "disabled";
  } else {
    this.classList.remove("error");
    document.getElementById("CatSubmit").disabled = false;
  }
}

function InitializeForm() {
  document.getElementById("botForm").onsubmit = ValidateForm;
  document.getElementById("botPage").oninput  = ValidatePageName;
  document.getElementById("botCat").oninput   = ValidateCategory;
}

window.onload = InitializeForm;
