package com.amol.application;

import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.context.ConfigurableApplicationContext;

@SpringBootApplication
public class DemoApplication {

	public static void main(String[] args) {
	ConfigurableApplicationContext context =	SpringApplication.run(DemoApplication.class, args);
//		Student stud = context.getBean(Student.class);
//		stud.show();
//		System.out.println("Hello World");
		Student stud1 = context.getBean(Student.class);
		stud1.show();

	}

}
