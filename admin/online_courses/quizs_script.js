document.getElementById("myForm").onsubmit = validateForm;

function validateForm() {
  var  untitle_form = document.getElementById("untitle_form").value;
    var question1 = document.getElementById("FirstQuestion").value;
    var option1_1 = document.getElementById("firstquestionfirst").value;
    var option2_1 = document.getElementById("secondquestionfirst").value;
    var option3_1 = document.getElementById("thirdquestionfirst").value;
    var question2 = document.getElementById("secondquestion").value;
    var option1_2 = document.getElementById("firstquestionfirst").value;
    var option2_2= document.getElementById("secondquestionfirst").value;
    var option3_2 = document.getElementById("thirdquestionfirst").value;
    var question3 = document.getElementById("thirdquestion").value;
    var option1_3 = document.getElementById("firstquestionthird").value;
    var option2_3= document.getElementById("secondquestionthird").value;
    var option3_3 = document.getElementById("thirdquestionthird").value;
    var question4 = document.getElementById("fourquestion").value;
    var option1_4 = document.getElementById("firstquestionfour").value;
    var option2_4= document.getElementById("secondquestionfour").value;
    var option3_4 = document.getElementById("thirdquestionfour").value;
    var question5 = document.getElementById("fifthquestion").value;
    var option1_5 = document.getElementById("firstquestionfifth").value;
    var option2_5= document.getElementById("secondquestionfifth").value;
    var option3_5 = document.getElementById("thirdquestionfifth").value;
    var isChecked = false;
  
    if (!untitle_form) {
      alert("Please enter title");
      return false;
    }
    if (!question1) {
      alert("Please enter a first question.");
      return false;
    }
    if (!option1_1) {
      alert("Please enter the first question first option.");
      return false;
    }
    if (!option2_1) {
      alert("Please enter the first question second option.");
      return false;
    }
    if (!option3_1) {
      alert("Please enter the first question third option.");
      return false;
    }
    if (!question2) {
      alert("Please enter a second question.");
      return false;
    }
    if (!option1_2) {
      alert("Please enter the second question first option.");
      return false;
    }
    if (!option2_2) {
      alert("Please enter the second question second option.");
      return false;
    }
    if (!option3_2) {
      alert("Please enter the second question third option.");
      return false;
    }
    if (!question3) {
      alert("Please enter a third question.");
      return false;
    }
    if (!option1_3) {
      alert("Please enter the third question first option.");
      return false;
    }
    if (!option2_3) {
      alert("Please enter the third question second option.");
      return false;
    }
    if (!option3_3) {
      alert("Please enter the third question third option.");
      return false;
    }
    if (!question4) {
      alert("Please enter a fourth question.");
      return false;
    }
    if (!option1_4) {
      alert("Please enter the fourth question first option.");
      return false;
    }
    if (!option2_4) {
      alert("Please enter the fourth question second option.");
      return false;
    }
    if (!option3_4) {
      alert("Please enter the fourth question third option.");
      return false;
    }
    if (!question5) {
      alert("Please enter a fifth question.");
      return false;
    }
    if (!option1_5) {
      alert("Please enter the fifth question first option.");
      return false;
    }
    if (!option2_5) {
      alert("Please enter the fifth question second option.");
      return false;
    }
    if (!option3_5) {
      alert("Please enter the fifth question third option.");
      return false;
    }
  
    var radioButtons = document.getElementsByName("optionfirst");
    
    for (var i = 0; i < radioButtons.length; i++) {
      if (radioButtons[i].checked) {
        isChecked = true;
        break;
      }
    }
    
    if (!isChecked) {
      alert("Please select an answer.");
      return false;
    }
  
    return true;
  }
  