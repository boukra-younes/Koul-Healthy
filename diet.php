<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diet</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function switchPage(event, currentPageId, nextPageId) {
            event.preventDefault();
            const currentPage = document.getElementById(currentPageId);
            const inputs = currentPage.querySelectorAll('input[required]');

            let allFilled = true;
            for (const input of inputs) {
                if (input.type === 'radio' || input.type === 'checkbox') {
                    const name = input.name;
                    const checked = currentPage.querySelector(`input[name="${name}"]:checked`);
                    if (!checked) {
                        allFilled = false;
                        break;
                    }
                } else if (input.type === 'number' && !input.value) {
                    allFilled = false;
                    break;
                }
            }

            if (allFilled) {
                // Hide all pages
                const pages = document.querySelectorAll('.page');
                pages.forEach(page => page.style.display = 'none');
                // Show the selected page
                const nextPage = document.getElementById(nextPageId);
                if (nextPage) {
                    nextPage.style.display = 'block';
                } else {
                    console.error('Page not found: ', nextPageId);
                }
            } else {
                Swal.fire({
                    icon: 'warning',
                    title: 'Missing Required Fields',
                    text: 'Please fill out the required options.',
                    confirmButtonText: 'OK'
                });
            }
        }

        function submitForm(event) {
            event.preventDefault();
            document.getElementById('dietForm').submit();
        }

        document.addEventListener('DOMContentLoaded', (event) => {
            // Ensure the first page is visible initially
            document.getElementById('page1').style.display = 'block';
        });
    </script>
    <style>
        .page {
            display: none;
        }
    </style>
    <link rel="stylesheet" href="css/dit.css">
</head>
<body>
    <form id="dietForm" action="submit_diet.php" method="POST">
        <div id="page1" class="page">
            <div class="p1"><p>A healthy app for better health</p></div>
            <div class="p2"><p>Personal weight adjustment plan according to your age</p></div>
            <div class="p3"><p>Choose your age group</p></div>
            <div class="squares">
                <label for="ageRange1" class="square">
                    <input type="radio" id="ageRange1" name="ageRange" value="18" required>
                    <img src="img/pi2.jpg" alt="صورة 1">
                    <div class="number">18~25</div>
                </label>
                <label for="ageRange2" class="square">
                    <input type="radio" id="ageRange2" name="ageRange" value="25" required>
                    <img src="img/pi1.png" alt="صورة 2">
                    <div class="number">25~40</div>
                </label>
                <label for="ageRange3" class="square">
                    <input type="radio" id="ageRange3" name="ageRange" value="40" required>
                    <img src="img/pi3.png" alt="صورة 3">
                    <div class="number">40~55</div>
                </label>
                <label for="ageRange4" class="square">
                    <input type="radio" id="ageRange4" name="ageRange" value="55" required>
                    <img src="img/pi4.png" alt="صورة 4">
                    <div class="number">55+</div>
                </label>
            </div>
            <button class="next-button" onclick="switchPage(event, 'page1', 'page2')">Next</button>
        </div>
        <div id="page2" class="page">
            <div class="p4"><p>Select your sex</p></div>
            <div class="genders">
                <input type="radio" class="genderb" id="maleButton" name="gender" value="male" required>
                <label for="maleButton" class="gender"><p>Male</p></label>
                <input type="radio" class="genderb" id="femaleButton" name="gender" value="female" required>
                <label for="femaleButton" class="gender"><p>Female</p></label>
            </div>
            <button class="back" onclick="switchPage(event, 'page2', 'page1')">Back</button>
            <button onclick="switchPage(event, 'page2', 'page3')">Next</button>
        </div>
        <div id="page3" class="page">
            <div class="p4"><p>What do you want to achieve</p></div>
            <div class="input-container">
                <input type="number" name="targetWeight" class="number-input" min="1" placeholder="0" required>
            </div>
            <button class="back" onclick="switchPage(event, 'page3', 'page2')">Back</button>
            <button onclick="switchPage(event, 'page3', 'page4')">Next</button>
        </div>
        <div id="page4" class="page">
            <div class="p4"><p>How tall are you?</p></div>
            <div class="input-container">
                <input type="number" name="height" class="number-input" min="1" placeholder="0" required>
            </div>
            <button class="back" onclick="switchPage(event, 'page4', 'page3')">Back</button>
            <button onclick="switchPage(event, 'page4', 'page5')">Next</button>
        </div>
        <div id="page5" class="page">
            <div class="p4"><p>How much do you weigh?</p></div>
            <div class="input-container">
                <input type="number" name="weight" class="number-input2" min="1" placeholder="0" required>
            </div>
            <button class="back" onclick="switchPage(event, 'page5', 'page4')">Back</button>
            <button onclick="switchPage(event, 'page5', 'page6')">Next</button>
        </div>
        <div id="page6" class="page">
            <div class="p4"><p>Do you have chronic diseases?</p></div>
            <div class="card">
                <div class="custom-control">
                    <input type="checkbox" class="custom-control-input" id="disease1" name="diseases[]" value="Anemia">
                    <label class="custom-control-label" for="disease1">Anemia</label>
                </div>
                <div class="custom-control">
                    <input type="checkbox" class="custom-control-input" id="disease2" name="diseases[]" value="High pressure">
                    <label class="custom-control-label" for="disease2">High pressure</label>
                </div>
                <div class="custom-control">
                    <input type="checkbox" class="custom-control-input" id="disease3" name="diseases[]" value="Diabetes">
                    <label class="custom-control-label" for="disease3">Diabetes</label>
                </div>
                <div class="custom-control">
                    <input type="checkbox" class="custom-control-input" id="disease4" name="diseases[]" value="Cholesterol">
                    <label class="custom-control-label" for="disease4">Cholesterol</label>
                </div>
                <div class="custom-control">
                    <input type="checkbox" class="custom-control-input" id="disease5" name="diseases[]" value="Obesity">
                    <label class="custom-control-label" for="disease5">Obesity</label>
                </div>
                <div class="custom-control">
                    <input type="checkbox" class="custom-control-input" id="disease6" name="diseases[]" value="Nothing" checked>
                    <label class="custom-control-label" for="disease6">Nothing</label>
                </div>
            </div>
            <button class="back" onclick="switchPage(event, 'page6', 'page5')">Back</button>
            <button onclick="switchPage(event, 'page6', 'page7')">Next</button>  
        </div>
        <div id="page7" class="page">
            <div class="p4"><p>Are you allergic?</p></div>
            <div class="card">
            <div class="custom-control">
                    <input type="checkbox" class="custom-control-input" id="allergy1" name="allergies[]" value="Lactose">
                    <label class="custom-control-label" for="allergy1">Lactose</label>
                </div>
                <div class="custom-control">
                    <input type="checkbox" class="custom-control-input" id="allergy2" name="allergies[]" value="Gluten">
                    <label class="custom-control-label" for="allergy2">Gluten</label>
                </div>
                <div class="custom-control">
                    <input type="checkbox" class="custom-control-input" id="allergy3" name="allergies[]" value="Peanuts">
                    <label class="custom-control-label" for="allergy3">Peanuts</label>
                </div>
                <div class="custom-control">
                    <input type="checkbox" class="custom-control-input" id="allergy4" name="allergies[]" value="Seafood">
                    <label class="custom-control-label" for="allergy4">Seafood</label>
                </div>
                <div class="custom-control">
                    <input type="checkbox" class="custom-control-input" id="allergy5" name="allergies[]" value="Milk & Dairy Products">
                    <label class="custom-control-label" for="allergy5">Milk & Dairy Products</label>
                </div>
                <div class="custom-control">
                    <input type="checkbox" class="custom-control-input" id="allergy6" name="allergies[]" value="White meat">
                    <label class="custom-control-label" for="allergy6">White meat</label>
                </div>
                <div class="custom-control">
                    <input type="checkbox" class="custom-control-input" id="allergy7" name="allergies[]" value="Red meat">
                    <label class="custom-control-label" for="allergy7">Red meat</label>
                </div>
                <div class="custom-control">
                    <input type="checkbox" class="custom-control-input" id="allergy8" name="allergies[]" value="Nothing" checked>
                    <label class="custom-control-label" for="allergy8">Nothing</label>
                </div>
            </div>
            <button class="back" onclick="switchPage(event, 'page7', 'page6')">Back</button>
            <button onclick="submitForm(event)">Submit</button>
        </div>
    </form>

</body>
</html>

