package com.webapp.application;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
public class HomeController {

	//localhost:8080/h2-console    <url access h2 db manager ui like php myadmin
	@RequestMapping("/")  //root home
	public String home() {
		
		return "home.jsp";
	}
}
