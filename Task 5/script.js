const bmiForm = document.getElementById("bmiForm");
const resultDiv = document.getElementById("result");

bmiForm.addEventListener("submit", calculateBMI);

function calculateBMI(e) {
    e.preventDefault();

    const weight = parseFloat(document.getElementById("weight").value);
    const height = parseFloat(document.getElementById("height").value);

    if (isNaN(weight) || isNaN(height)) {
        resultDiv.textContent = "Please enter valid values for weight and height.";
        return;
    }

    const bmi = (weight / ((height / 100) * (height / 100))).toFixed(2);
    let category = "";

    if (bmi < 18.5) {
        category = "Underweight";
    } else if (bmi >= 18.5 && bmi < 24.9) {
        category = "Normal Weight";
    } else if (bmi >= 25 && bmi < 29.9) {
        category = "Overweight";
    } else {
        category = "Obese";
    }

    resultDiv.textContent = `Your BMI is ${bmi}. You are ${category}.`;
}
