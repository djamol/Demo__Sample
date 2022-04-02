package com.webapp.application;

import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpSession;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.ResponseBody;
import org.springframework.web.servlet.ModelAndView;

@Controller
public class HomeController {

	//http://localhost:8080/home
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
	
	// http://localhost:8080/student <- Not found page (param null/undefined not allowed
	// http://localhost:8080/student?name <?> <-Required req param	
	@RequestMapping("student")	
	public String student(@RequestParam("name") String Myname,HttpSession session){
		session.setAttribute("name", Myname);
		System.out.println("student IS HERE");
		return "home";
	}

	@RequestMapping("model")	
	public ModelAndView modelview(@RequestParam("name") String Myname,HttpSession session){
		ModelAndView mv = new ModelAndView();
		mv.addObject("name",Myname); // send data/object in mv
		mv.addObject(session);
		mv.setViewName("home"); //view name jsp path/page name
		return mv;
	}


	
}
