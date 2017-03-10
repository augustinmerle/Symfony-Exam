Feature: Manage Cirqual object
  In order to manage books and their reviews
  As a client software developer
  I need to be able to retrieve, create, update and delete them trough the API.

  # the "@createSchema" annotation provided by API Platform creates a temporary SQLite database for testing the API
  @createSchema
  Scenario: Create a Cirqual
    When I add "Content-Type" header equal to "application/ld+json"
    And I add "Accept" header equal to "application/ld+json"
    And I send a "POST" request to "/cirquals" with body:
    """
    {
      "ORIGGPCD": "01.1",
      "ORIGGPFR": "Farines et amidons",
      "ORIGFDCD": "9410",
      "ORIGFDNM": "Farine de Maïs",
      "energie": "203"
    }
    """
    Then the response status code should be 201
    And the response should be in JSON
    And the header "Content-Type" should be equal to "application/ld+json; charset=utf-8"
    And the JSON should be equal to:
    """
    {
      "@context": "/contexts/Book",
      "@id": "/cirqual/9410",
      "@type": "Cirqual",
      "id": 1,
      "ORIGGPCD": "01.1",
      "ORIGGPFR": "Farines et amidons",
      "ORIGFDCD": "9410",
      "ORIGFDNM": "Farine de Maïs",
      "energie": "203"
    }
    """