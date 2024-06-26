# Project Overview

This project consists of two problems:

- A PHP program that takes an array of strings
- Create a simple Library System in PHP using OOP

Each problems is briefly described below along with its requirements.

## 1. Problem Statement

### Description

A PHP program that takes an array of strings as input. Program should iterate over each string in the array and perform the following operations.

### Features

- Count the number of vowels (a, e, i, o, u) in each string.
- Reverse each string.
- Print the original string and the modified strings along with their vowel counts.

### Requirements

Use the variables:

- $strings = ["Hello", "World", "PHP", "Programming"];

### Outputs

- Original String: Hello, Vowel Count: 2, Reversed String: olleH
- Original String: World, Vowel Count: 1, Reversed String: dlroW
- Original String: PHP, Vowel Count: 0, Reversed String: PHP
- Original String: Programming, Vowel Count: 3, Reversed String: gnimmargorP

## 2. Problem Statement

### Description

To create a simple Library System in PHP using Object-Oriented Programming (OOP) principles. The system should have the following functionalities:

### Functionalities

- Create a Book class with private properties for title and availableCopies.
- Create a Member class with a private property for name.
- Implement methods in the Book class to borrow and return books. This borrowBook method should decrease the available copies and returnBook method should increase the available copies.
- Implement methods in the Member class to borrow and return books. Here the borrowBook method should take book as an argument - Write a PHP program to demonstrate the usage of the library system, including adding books to the library, adding members, borrowing books, returning books, and displaying the available books.
- Create 2 books and 2 members. Member One has to borrow book 1 and Member Two has to borrow book 2.
- A template is provided for reference use.

### Requirements

- Use the reference template

### Outputs

- Available Copies of 'The Great Gatsby': 4
- Available Copies of 'To Kill a Mockingbird': 2
