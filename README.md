# accessible-registration-form

To create documentation for your GitHub repository regarding the **Registration Form** project, here’s an outline you can follow for the `README.md` file, which will serve as the documentation. It explains the purpose, setup, usage, and other relevant details for developers and users.

---

# Table of Contents

1. ⬇️ [Installation](#installation)
2. 📂 [Folder Structure](#folder-structure)
3. 📄 [registration_card](#registration-card)
4. 📊 [Student Results Calculator](#student-result-calculator)`
5. 🐘 [Features](#features)
6. 🤝 [Connect With me](#contact)
7. 📜 [License](#License)
8. 🧾 [Credit](#credit)

## <a name="installation">⬇️ Installation</a>

Follow these steps to set up the project locally on your machine.
**Prerequisites**
Make sure you have the following installed on your machine:

-   [Git](https://git-scm.com/)
-   [VS-Code](https://code.visualstudio.com/)
-   [PHP Server VS Code Extension](https://marketplace.visualstudio.com/items?itemName=brapifra.phpserver)

**Cloning the Repository**

```bash
$ git clone https://github.com/prantomollick/accessible-registration-form.git
$ cd accessible-registration-form
```

## <a name="folder-structure">📂 Folder Structure</a>

```
.
├── README.md
├── registration_card
│   ├── registration_form.html
│   ├── script.js
│   └── styles.css
├── student_result
│   └── result.php
└── task-1 html and css.png

```

## <a name="registration-card">📄 **Registration Form**</a>

-   🚀 [Project Overview](#project-overview)
-   🛠️ [Features](#features)
-   📁 [Repository Structure](#repository-structure)
-   📝 [Form Fields & Validation Rules](#form-field-validation-rules)
-   💻 [Installation & Setup](#installation-setup)
-   🧑‍💻 [usage](#usage)
-   🧪 [Test Cases](#test-cases)
-   🛠️ [Built With](#build-with)

### <a name="project-overview">🚀 **Project Overview**</a>

This project is a simple **Registration Form** built using HTML, CSS, and JavaScript. It includes form validation, accessibility features, and can send form data via a POST request to a server using the Fetch API.

The form collects user information, such as:

-   Full Name
-   Username
-   Email
-   Phone Number
-   Password & Confirm Password
-   Gender (Male, Female, Other)

### <a name="features">🛠️ **Features**</a>

-   **Client-side validation**: Validates form fields, ensuring data integrity (e.g., checking email format, matching passwords, etc.).
-   **Accessible form design**: Ensures that screen readers and keyboard navigation are properly supported.
-   **Real-time feedback**: Provides instant validation feedback, highlighting errors as users fill in the form.
-   **Fetch API Integration**: Sends form data via `fetch()` POST request when submitted.

---

### <a name="repository-structure">📁 **Repository Structure**</a>

```bash
.
├── index.html          # HTML structure of the registration form
├── style.css           # CSS styling for the form and page layout
├── script.js           # JavaScript for form validation and sending data via Fetch API

```

### <a name="form-field-validation-rules">📝 **Form Fields & Validation Rules**</a>

1. **Full Name**: Must contain only letters (at least 2 characters).
2. **Username**: Should be alphanumeric and at least 3 characters long.
3. **Email**: Must follow a valid email format (e.g., `user@example.com`).
4. **Phone Number**: Validates phone number format (only digits allowed).
5. **Password**: Must be at least 8 characters long.
6. **Confirm Password**: Must match the password entered.
7. **Gender**: One of Male, Female, or Other must be selected.

---

### 💻 **Installation & Setup**

To run this project locally, follow these steps:

1. **Clone the repository**:

    ```bash
    git clone https://github.com/prantomollick/accessible-registration-form.git
    cd accessible-registration-form/registration_card
    ```

2. **Open the project**:

    - Simply open `index.html` in your browser to view the form.
    - Use any local server to serve the form, such as `Live Server` (VS Code extension) or using Python’s Simple HTTP server:
        ```bash
        python3 -m http.server
        ```

3. **Fetch API Setup**:
    - You can modify the Fetch API URL inside the `script.js` file to point to your own server for testing:
        ```javascript
        fetch("https://example.com/api/register", {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify(formObject)
        });
        ```

---

### <a name="usage"> 🧑‍💻 **Usage** </a>

1. **Fill in the form**: Provide the required information (name, username, email, etc.).
2. **Validation Feedback**: The form will validate fields in real-time. If any field is invalid, it will display an error message under the input field.
3. **Submit**: After filling in all the fields correctly, submit the form. The form data will be sent to the server endpoint via the Fetch API.

---

### <a name="test-cases">🧪 **Test Cases** </a>

1. **Submit Valid Data**:
    - Fill in all fields with valid data.
    - Expected Result: The form should submit successfully and send the data to the server.
2. **Submit Invalid Data**:

    - Leave one or more fields empty or provide invalid values (e.g., invalid email format, non-matching passwords).
    - Expected Result: The form should show appropriate error messages for the invalid fields.

3. **Real-Time Validation**:
    - Focus on an input field and type invalid data.
    - Expected Result: Error message should appear when the data doesn't match validation rules.

---

### <a name="build-with">🛠️ **Built With**</a>

-   HTML5
-   CSS3
-   JavaScript (ES6+)
-   Fetch API

---

## <a name="student-result-calculator">📊 **Student Results Calculator**</a>

This project is a **PHP program** designed to calculate student results based on marks obtained in five subjects. It validates the marks, checks for fail conditions, calculates total marks, average marks, and assigns a grade based on the average.

---

### 📑 **Table of Contents**

-   [Project Overview](#student-project-overview)
-   [Features](#student-features)
-   [Repository Structure](#student-repository-structure)
-   [Installation & Setup](#installation--setup)
-   [Usage](#student-usage)
-   [Test Cases](#student-test-cases)
-   [License](#license)

---

### <a name="student-project-overview">🚀 **Project Overview**</a>

This project calculates the student result based on five subjects. The program includes the following:

-   **Mark Range Validation**: Ensures marks are between 0 and 100.
-   **Fail Condition**: A student fails if any subject has a score below 33.
-   **Grade Calculation**: Grades are assigned based on the average marks as follows:
    -   A+ : 80 to 100
    -   A : 70 to 79
    -   A- : 60 to 69
    -   B : 50 to 59
    -   C : 40 to 49
    -   D : 33 to 39
    -   F : Below 33

The program checks for mark validity, calculates total marks, average marks, and assigns grades based on the conditions described above.

---

### <a name="student-features">🛠️ **Features**</a>

-   **Mark Validation**: Marks should be between 0-100.
-   **Fail Condition**: Marks below 33 result in a failing grade.
-   **Grade Calculation**: Based on average marks.
-   **Modular Design**: Functions for each task for reusability and clean code.

---

### <a name="student-repository-structure">📁 **Repository Structure**</a>

```bash
.
├── result.php    # Main PHP program with functions and test cases
├── README.md                # Documentation (this file)
```

---

### <a name="installation--setup">💻 **Installation & Setup**</a>

To run this project locally:

1. **Clone the repository**:

    ```bash
    git clone https://github.com/prantomollick/accessible-registration-form.git
    cd accessible-registration-form/student_result
    ```

2. **Run the PHP file**:

    - Use a local PHP server or any server like XAMPP, MAMP, or WAMP to run the `result.php` file.

    Or run it from the terminal:

    ```bash
    php result.php
    ```

---

### <a name="student-usage"> 📝 **Usage** </a>

1. **Marks Input**: You can provide an array of marks for five subjects, where each subject has a mark between 0 and 100.
2. **Mark Validation**: The program checks if all marks are within the valid range.
3. **Fail Condition**: It checks if any subject has a failing mark (below 33).
4. **Grade Assignment**: Based on the average marks, a grade is calculated and displayed along with the total and average.

---

### <a name="student-test-cases">🧪 **Test Cases** </a>

#### **Case 1: Normal Pass with Grade B**

```php
$studentMarks1 = [
    'Math' => 45,
    'English' => 55,
    'Science' => 60,
    'History' => 70,
    'Geography' => 50
];
```

**Output**:

```
Total Marks: 280
Average Marks: 56
Grade: B
```

#### **Case 2: Student Fails in One Subject**

```php
$studentMarks2 = [
    'Math' => 25,  // Below 33
    'English' => 55,
    'Science' => 60,
    'History' => 70,
    'Geography' => 50
];
```

**Output**:

```
Failing mark found in Math with mark 25.
```

#### **Case 3: Invalid Marks (Out of Range)**

```php
$studentMarks3 = [
    'Math' => 105,  // Invalid mark (>100)
    'English' => 55,
    'Science' => 60,
    'History' => 70,
    'Geography' => 50
];
```

**Output**:

```
Mark range is invalid for Math.
```

#### **Case 4: High Marks, Grade A+**

```php
$studentMarks4 = [
    'Math' => 90,
    'English' => 95,
    'Science' => 85,
    'History' => 80,
    'Geography' => 92
];
```

**Output**:

```
Total Marks: 442
Average Marks: 88.4
Grade: A+
```

#### **Case 5: Low Marks, Grade D**

```php
$studentMarks5 = [
    'Math' => 33,
    'English' => 35,
    'Science' => 38,
    'History' => 34,
    'Geography' => 36
];
```

**Output**:

```
Total Marks: 176
Average Marks: 35.2
Grade: D
```

#### **Case 6: All Subjects with Perfect Marks**

```php
$studentMarks6 = [
    'Math' => 100,
    'English' => 100,
    'Science' => 100,
    'History' => 100,
    'Geography' => 100
];
```

**Output**:

```
Total Marks: 500
Average Marks: 100
Grade: A+
```

---

## <a name="license">📜 **License** </a>

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---

## <a name="contact">🤝 Connect With me</a>

👥 [@prantomollick](https://www.linkedin.com/in/prantomollick/)
❌ [@prantomollick55](https://x.com/prantomollick55)
✉️ [prantomollick01@gmail.com](mailto:prantomollick01@gmail.com)
🌎 https://prantomollick.com

## <a name="credit">🧾 Credit</a>

<em><samll>This project is develope by me to complete assignment project[Pranto Mollick](https://prantomollick.com)</samll></em>
