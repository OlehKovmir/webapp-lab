# WebApp Lab Project

This project is a full-stack web application with automated CI/CD pipeline using GitHub Actions.

---

## Tech Stack

### Frontend / JS

* JavaScript
* ESLint
* Jest (testing)

### Backend / PHP

* PHP 8.4
* PHPUnit
* PHPStan

### DevOps

* GitHub Actions (CI/CD)
* Gitleaks (security scanning)

---

## Features

✔ Code linting (ESLint)
✔ Unit testing (Jest + PHPUnit)
✔ Static code analysis (PHPStan)
✔ Security scanning (Gitleaks)
✔ Automated CI pipeline on every push

---

## CI Pipeline

The project uses GitHub Actions to automatically:

* Install dependencies
* Run ESLint
* Run JavaScript tests
* Run PHP tests (PHPUnit)
* Perform static analysis (PHPStan)
* Scan for secrets (Gitleaks)

---

## Installation

Clone the repository:

```bash
git clone https://github.com/OlehKovmir/webapp-lab.git
cd webapp-lab
```

Install dependencies:

```bash
npm install
composer install
```

---

## Running Tests

### JavaScript

```bash
npm test
```

### PHP

```bash
./vendor/bin/phpunit php-tests
```

---

## Static Analysis

```bash
./vendor/bin/phpstan analyse php-tests --level=5
```

---

## Linting

```bash
npm run lint
```

---

## Security Check

```bash
gitleaks detect
```

---

## CI Status

Every push triggers automated checks via GitHub Actions.

---

## Author

Oleh Kovmir

---

## Notes

This project was created as part of a programming coursework and demonstrates modern development practices including CI/CD, testing, and code quality enforcement.
