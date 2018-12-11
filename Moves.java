import java.util.*;

public class Moves{
	private String move;
	private Type type;
	private int power;
	private ArrayList<Moves> moveset = new ArrayList<Moves>();

	public Moves(String move, Type type, int power){
		this.move = move;
		this.type = type;
		this.power = power;
	}

	public String getMoveName(){
		return this.move;
	}

	public void setMoveName(String moveName){
		this.move = moveName;
	}

	public Type getMoveType(){
		return this.type;
	}

	public int getMovePower(){
		return this.power;
	}
}