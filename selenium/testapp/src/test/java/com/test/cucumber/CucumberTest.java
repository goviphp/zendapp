package com.test.cucumber;
import org.junit.runner.RunWith;
import cucumber.api.CucumberOptions;
import cucumber.api.junit.Cucumber;
 
@RunWith(Cucumber.class)
@CucumberOptions(
		features = "Feature.LoginTest"
		,glue={"com.test.StepDefinition"}
		)

public class CucumberTest {

}