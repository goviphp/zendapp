Feature: Login Action

Scenario: Successful Login with Valid Credentials
	Given User is on Login Page
	When User enters UserName and Password
	Then User should be navigated to List Page
	
Scenario: UnSuccessful Login with Invalid Credentials
	Given User is on Login Page
	When User enters Invalid UserName and Invalid Password
	Then User should be on Login Page