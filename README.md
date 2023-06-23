<div align="center">
<img src="https://img.freepik.com/free-vector/exams-concept-illustration_114360-2754.jpg?size=626&ext=jpg&ga=GA1.1.1703511780.1687538153&semt=ais" alt="studen-exams"/>
</div>

<div align="center">
<h1>Laravel student exams</h1>
</div>

<div align="center">
<a href="https://github.com/bagherkeshmiri/Link-Shortener/releases/">
<img src="https://img.shields.io/github/release/bagherkeshmiri/Link-Shortener?include_prereleases=&sort=semver&color=red" alt="GitHub release">
</a>
<img src="https://img.shields.io/badge/License-MIT-green" alt="License">
<a href="https://github.com/bagherkeshmiri/Link-Shortener/releases/">
<img src="https://img.shields.io/github/tag/bagherkeshmiri/Link-Shortener?include_prereleases=&sort=semver&color=blue" alt="GitHub tag">
</a>
<img src="https://img.shields.io/badge/downloads-1k-green" alt="downloads - 1k">
<a href="https://www.mysql.com/" title="Go to MySQL homepage">
    <img src="https://img.shields.io/badge/MySQL-%3E=5.7-blue?logo=mysql&logoColor=white" alt="Made with MySQL">
</a>
<a href="#" title="Go to contributions doc">
    <img src="https://img.shields.io/badge/contributions-welcome-yellow" alt="contributions - welcome">
</a>
<img src="https://img.shields.io/badge/maintained-yes-blue" alt="maintained - yes">
</div>

## About student exams
 - It is a web-based system for managing student questions and exams that was developed with PHP language and Laravel framework.
 - It has a management panel to define teachers and manage questions by teachers and administrators.
 - It has a panel for entering students and registering answers to question.

- [Installation](#installation)

## Installation
1 - In order to install, considering that the Brasa Laravel framework has been developed, you need to clone the project in your desired path :
```bash
git clone https://github.com/bagherkeshmiri/student-exams.git
```

2 - To get the core of the project (vendor), you need to run the following code :
```bash
composer update
```

3 - After receiving the contents of the vendor folder, it is necessary to set the .env file of the project and connect to the database .

4 - Then execute the following command to create tables and input basic information :
```bash
 php artisan migrate --seed
```

## Contributing
Thank you for participating in this project!
It is possible to send an error correction request in the form of a merge request

## Security Vulnerabilities
If you discover a security vulnerability within Laravel student exams, please send an e-mail to Bagher Keshmiri via [bagherkeshmiri@gmail.com](mailto:bagherkeshmiri@gmail.com). All security vulnerabilities will be promptly addressed.

## License
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
