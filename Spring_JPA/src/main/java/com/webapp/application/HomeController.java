package com.webapp.application;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
public class HomeController {
	
	@RequestMapping("/")  //root home
	public String home() {
		return "home.jsp";
	}
}
