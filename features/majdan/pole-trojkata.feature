Feature: Obliczanie pola trójkąta

  Scenario: Obliczanie pola trójkąta
    Given I am on homepage
    When I follow "Pole trójkąta by majdan"
    And I fill in "a" with "4"
    And I fill in "h" with "3"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 6"
