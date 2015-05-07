Feature: Obliczenia

  Scenario: Pole trojkata
    Given I am on homepage
    When I follow "Kalkulator by gajdaw"
    And I fill in "a" with "5"
    And I fill in "h" with "2"
    And I press "Oblicz"
    Then I should see "Wynik wynosi: 5"