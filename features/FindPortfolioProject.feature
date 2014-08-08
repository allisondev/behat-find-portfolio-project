Feature: Find Bullfrog in Portfolio
  In order to find projects efficiently
  As an user
  I need to be able to find them from the portfolio

@javascript
Scenario: Finding Bullfrog
  Given I go to "http://hsallisonlaw.com/portfolio"
  Then I am at portfolio
