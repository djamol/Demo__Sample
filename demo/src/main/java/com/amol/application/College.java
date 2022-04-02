package com.amol.application;

import org.springframework.stereotype.Component;

@Component
public class College {
	int cid;
	String cname;
	public int getCid() {
		return cid;
	}
	public void setCid(int cid) {
		this.cid = cid;
	}
	public String getCname() {
		return cname;
	}
	public void setCname(String cname) {
		this.cname = cname;
	}
	public void collegeshow() {
		System.out.println("College Show Method");
	}

}
