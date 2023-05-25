//classes and objects(OOP CONCEPT)
public class Main
{
	int x=10;      //initializing variable x
	int y=20;      //initializing variable y

	public static void main(String[] args)
	{
		Main myobj1 = new Main();  //creating object 1
		Main myobj2 = new Main();  //creating object 2
		System.out.println(myobj1.x); 
		System.out.println(myobj2.y);
	    myobj2.y=50;    //reinintializing
	    System.out.println(myobj2.y);

	}

}