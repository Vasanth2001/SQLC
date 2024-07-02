# SQLC
This project involves designing an SQL database management system (DBMS) in C++. It parses SQL statements, scans tokens, performs semantic analysis, and handles file operations. Integrated with a multithreaded HTTP web server resulting in a robust DBMS.

# Introduction
This project involves designing and implementing a comprehensive SQL database management system (DBMS) in C++. The goal is to create a fully functional DBMS capable of parsing SQL statements, performing semantic analysis, and managing various file operations. The system integrates seamlessly with a multithreaded HTTP web server, ensuring robust performance and scalability.

# Key Features
SQL Parsing and Token Scanning:

The DBMS can parse files containing SQL statements, scanning and identifying tokens efficiently.
It supports various file extensions for SQL files, offering flexibility in file handling.
Semantic Analysis:

The system performs semantic analysis to ensure SQL statements are correctly interpreted and executed within the DBMS.
File Upload Handling:

It can accept file uploads in different formats and implement necessary restrictions and permissions.
HTTP Web Server Integration:

The DBMS integrates with a multithreaded HTTP web server, enabling efficient management and processing of HTTP requests.
This integration allows the DBMS to handle concurrent connections and deliver high performance.
Advanced File Handling Techniques:

The system supports various file operations, including deleting files and folders, reading directory contents, and handling directory operations.
It can create databases and tables, insert and update data entries, and manage directories and their contents.
Secure Database Operations:

The DBMS ensures secure database operations, including authentication of database login credentials, and secure deletion of tables and databases.
Cross-Platform Compatibility:

While the project is primarily designed for C++, it ensures cross-platform compatibility with additional headers for file handling where necessary for Windows users.
The DBMS operates without relying on external libraries, providing a self-contained and robust system.

# Project Structure
The project is organized into several modules, each responsible for a specific aspect of the DBMS:

SQL Parser:

Handles the parsing of SQL statements and token scanning.
Semantic Analyzer:

Conducts semantic analysis and ensures the correct interpretation of SQL statements.
File Handler:

Manages various file operations, including file uploads, directory handling, and secure file deletions.
Web Server Integration:

Integrates the DBMS with a multithreaded HTTP web server for handling HTTP requests.
Database Operations:

Manages database operations such as creating databases and tables, inserting and updating data, and performing secure deletions.
Getting Started
To set up and run the project:


# Conclusion
This project demonstrates the development of a robust SQL database management system in C++. By integrating advanced file handling techniques, secure database operations, and seamless web server integration, the DBMS is well-suited for real-world applications. The cross-platform compatibility and independence from external libraries make it a versatile and powerful tool for managing SQL databases.

