package com;

public class Student {
	
	private int roll_no;
	private String name;
	private String gender;
	
	public Student(int roll_no, String name, String gender) {
		this.roll_no = roll_no;
		this.name = name;
		this.gender = gender;
	}

	public int getRoll_no() {
		return roll_no;
	}

	public void setRoll_no(int roll_no) {
		this.roll_no = roll_no;
	}

	public String getName() {
		return name;
	}

	public void setName(String name) {
		this.name = name;
	}

	public String getGender() {
		return gender;
	}

	public void setGender(String gender) {
		this.gender = gender;
	}
	
}
