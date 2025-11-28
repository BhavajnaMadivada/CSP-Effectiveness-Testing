# **CSP Effectiveness Testing Lab**

A lightweight PHP-based vulnerability lab designed to test how effective (or ineffective) **Content Security Policy (CSP)** is against **Reflected, Stored, and DOM-based XSS attacks**. The project demonstrates how strict CSP blocks malicious scripts and how common developer misconfigurations allow attackers to bypass CSP protections.

---

## 🚀 **Features**

* Reflected XSS module
* Stored XSS module
* DOM-based XSS module
* Strict CSP implementation
* Weak/misconfigured CSP examples
* Real CSP violation logs in browser
* OWASP-based testing methodology

---

## 🛡️ **What This Project Demonstrates**

* How XSS executes without CSP
* How strict CSP blocks inline & external scripts
* How mistakes like missing colons, missing semicolons, and unquoted hashes weaken CSP
* Comparison of attack results with vs. without CSP

---

## 📂 **Project Structure**

```
/vuln-lab
 ├── home.php
 ├── reflected.php
 ├── stored.php
 ├── dom.php
 ├── csp_strict.php
 ├── csp_weak.php
 ├── comments.txt
 ├── style.css
 └── index.php
```

---

## 🧪 **How to Run**

1. Install **XAMPP**
2. Place the project folder under:
   `htdocs/vuln-lab/`
3. Start **Apache**
4. Visit:

   ```
   http://localhost/vuln-lab/
   ```

---

