# Behat Testing of my Drupal Portfolio site

This exercise uses Behat to test my Drupal site at http://hsallisonlaw.com/portfolio.

## FindPortfolioProject.feature
The features/FindPortfolioProject.feature file contains steps to test the following:
* Open a browser (Firefox for Sellenium) and go to "http://hsallisonlaw.com/portfolio"
* Call a custom function with an "I am at portfolio" step

## FeatureContext.php
The features/Bootstrap/FeatureContext.php file contains the custom function iAmAtPortfolio(), which then returns the following steps:
* Click on the "Projects" link
* Click on the "Bullfrog Drupal Sub-Theme" link
* Click on the "Bullfrog Drupal Sub-Theme Project" link
* Check that I am on the page "http://www.hsallisonlaw.com/drupalbullfrog/". 
