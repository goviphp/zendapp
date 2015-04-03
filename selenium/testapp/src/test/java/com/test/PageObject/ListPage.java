package com.test.PageObject;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;

public class ListPage {
	

    private static WebElement element = null;

 public static WebElement lnk_HelloAdm(WebDriver driver){

    element = driver.findElement(By.xpath("//*[@id='navbar-collapse']/ul/li/a"));

    return element;

    }

 public static WebElement lnk_LogOut(WebDriver driver){

    element = driver.findElement(By.xpath("//*[@id='navbar-collapse']/ul/li/ul/li/a"));

    return element;

    }

}

