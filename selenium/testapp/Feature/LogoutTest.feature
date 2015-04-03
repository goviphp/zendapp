Feature: Logout Action
	
Scenario: Successful LogOut
	Given User is on the ListPage
	When User clicks the Hello Administrator! link
	And User clicks the Logout link
	Then User should see the LoginPage again