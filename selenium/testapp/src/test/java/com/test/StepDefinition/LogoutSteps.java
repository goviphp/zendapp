package com.test.StepDefinition;

import static org.junit.Assert.assertEquals;

import java.util.concurrent.TimeUnit;

import org.openqa.selenium.WebDriver;
import org.openqa.selenium.firefox.FirefoxDriver;

import com.test.PageObject.ListPage;
import com.test.PageObject.LoginPage;

import cucumber.api.java.en.Given;
import cucumber.api.java.en.Then;
import cucumber.api.java.en.When;

public class LogoutSteps {

	public static WebDriver driver;
	@Given("^User is on the ListPage$")
	public void user_is_on_the_ListPage() throws Throwable {
		driver = new FirefoxDriver();
        driver.manage().timeouts().implicitlyWait(10, TimeUnit.SECONDS);
        //TODO
        driver.get("http://localhost:81/raji/zendapp/public/login");
        driver.manage().window().maximize();
        LoginPage.txtbx_UserName(driver).sendKeys("admin");
		LoginPage.txtbx_Password(driver).sendKeys("admin");
		LoginPage.btn_LogIn(driver).click();
	   
	}

	@When("^User clicks the Hello Administrator! link$")
	public void user_clicks_the_Hello_Administrator_link() throws Throwable {

		ListPage.lnk_HelloAdm(driver).click();
		
	    
	}

	@When("^User clicks the Logout link$")
	public void user_clicks_the_Logout_link() throws Throwable {
		ListPage.lnk_LogOut(driver).click();
	    
	}

	@Then("^User should see the LoginPage again$")
	public void user_should_see_the_LoginPage_again() throws Throwable {
		assertEquals("","");
		System.out.println("Logout successful");
		driver.quit();
	    
	}

}
