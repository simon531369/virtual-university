package java;

import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;		


public class MainTest {
	
	WebDriver Driver ;
	
	public void LaunchBrowser() {
		System.setProperty("webdriver.chrome.driver","/home/rahul/eclipse-workspace/seleniumtesting/drivers\n");
		Driver = new ChromeDriver();
		Driver.get("https://kushala.org/workspace/virtual-university/");
	}
	public void closebrowser() {
		Driver.quit();
		
	}
	public static void main(String[] args) {
		MainTest obj = new MainTest();
		obj.LaunchBrowser();
		obj.closebrowser();
	}
}
				
					
