Feature: Trojkat

  Scenario: Kalkulator a * b
    Given I am on homepage
    When I follow "Trojkat by kgrzech"
    And I fill in "a" with "5"
    And I fill in "h" with "7"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 30"