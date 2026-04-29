# Overview

This repository represents my skills of work with native PHP 8+ modules without any frameworks and folows strict set of requirements of the test task.

## Requirements

This must be a simple working example of the blog constructed on pure PHP wuthout use of any frameworks.
It should use MySQL as Database and Smarty as template engine. This website must have features of the blog with categories and posts.

### Technologies that will be used
- PHP 8.1+
- Smarty template engine
- MySQL Database

### Database structure
- Category
    - name
    - description
    - createdAt
- Post
    - image
    - name
    - description
    - text
    - publishAt
    - category(one to many relationship)
    - viewsCount

### Mandotory pages to display
- Main page 
    - Should list each category and display last 3 posts in the category (use multi sort, viewsCount and publishAt)
    - Each category should have button "All Posts"
- Catory page
    - Show name, description and list of the posts
    - Allow sort by viewsCount and publishAt date
    - Show posts pagginated
- Post page
    - Show full information about article
    - Show block with 3 similar articles

## Roadmap

- [x] Docker infrastructure
    - [x] Docker file for the App
    - [x] Docker compose file with next containere
        - [x] Web server container to host our solution
        - [x] MySQL container for Database
- [x] Router
    - [x] Basic Routes
    - [x] Dynamic Routes (Posts)
- [x] Connect Smarty template engine
- [x] Create Database Connection
- [x] Create Database migrations
- [x] Create Database Modules for Post and Category
- [x] Create Category Controller
- [x] Create Post Controller
- [x] Create Layout view
- [x] Create Homapage view
- [s] Create Category view
- [x] Create Post view
- [x] Create Seed

