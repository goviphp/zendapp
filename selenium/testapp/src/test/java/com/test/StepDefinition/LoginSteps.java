package com.test.StepDefinition;

import java.util.concurrent.TimeUnit;

import org.openqa.selenium.WebDriver;
import org.openqa.selenium.firefox.FirefoxDriver;

import com.test.PageObject.LoginPage;

import cucumber.api.java.en.Given;
import cucumber.api.java.en.Then;
import cucumber.api.java.en.When;
import static org.junit.Assert.assertEquals;

public class LoginSteps {
	public static WebDriver driver;
	@Given("^User is on Login Page$")
	public void user_is_on_Login_Page() throws Throwable {
		driver = new FirefoxDriver();
        driver.manage().timeouts().implicitlyWait(10, TimeUnit.SECONDS);
        //TODO
        driver.get("http://localhost:81/raji/zendapp/public/login");
        driver.manage().window().maximize();

	}

	@When("^User enters UserName and Password$")
	public void user_enters_UserName_and_Password() throws Throwable {
		LoginPage.txtbx_UserName(driver).sendKeys("admin");
		LoginPage.txtbx_Password(driver).sendKeys("admin");
		LoginPage.btn_LogIn(driver).click();
	}

	@Then("^User should be navigated to List Page$")
	public void user_should_be_navigated_to_List_Page() throws Throwable {
	    // Write code here that turns the phrase above into concrete actions
		assertEquals("","");
		System.out.println("Login successful");
		driver.quit();
	    
	}
	
	@When("^User enters Invalid UserName and Invalid Password$")
	public void user_enters_Invalid_UserName_and_Invalid_Password() throws Throwable {
		driver = new FirefoxDriver();
        driver.manage().timeouts().implicitlyWait(10, TimeUnit.SECONDS);
        //TODO
        driver.get("http://localhost:81/raji/zendapp/public/login");
        driver.manage().window().maximize();
		LoginPage.txtbx_UserName(driver).sendKeys("admin1");
		LoginPage.txtbx_Password(driver).sendKeys("admin1");
		LoginPage.btn_LogIn(driver).click();
	}


	@Then("^User should be on Login Page$")
	public void user_should_be_on_Login_Page() throws Throwable {
	    // Write code here that turns the phrase above into concrete actions
		assertEquals("","");
		System.out.println("Invalid credentials");
	}

	

}
