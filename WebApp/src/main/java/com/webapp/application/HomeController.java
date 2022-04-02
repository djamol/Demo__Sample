package com.webapp.application;

import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpSession;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.ResponseBody;

@Controller
public class HomeController {

	@RequestMapping("home")	
	public String home(HttpServletRequest req){
		String name = req.getParameter("name");
		HttpSession session = req.getSession();
		session.setAttribute("name", name);
		System.out.println("HOME IS HERE");
		return "home";
	}
	@RequestMapping("todo")	
	public String todo(String name,HttpSession session){
		session.setAttribute("name", name);
		System.out.println("todo IS HERE");
		return "home";
	}

}
