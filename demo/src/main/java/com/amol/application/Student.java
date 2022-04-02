package com.amol.application;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.context.annotation.Scope;
import org.springframework.stereotype.Component;

@Component
//@Scope(value="prototype")

public class Student {
		int id;
		String name;
		String course;
		@Autowired
		College college;
		public Student() {
			super();
			System.out.println(" Invoke Default Cons.");
		}
		public int getId() {
			return id;
		}
		public College getCollege() {
			return college;
		}
		public void setCollege(College college) {
			this.college = college;
		}
		public void setId(int id) {
			this.id = id;
		}
		public String getName() {
			return name;
		}
		public void setName(String name) {
			this.name = name;
		}
		public String getCourse() {
			return course;
		}
		public void setCourse(String course) {
			this.course = course;
		}
		public void show() {
			System.out.println("Welcome Student");
			college.collegeshow();
		}
}
