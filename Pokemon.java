import java.util.*;

public class Pokemon{
    private String Name;
    private Type type1;
	private Type type2;
	private int Hp;
	private int Atk;
	private int Def;
	private int SpAtk;
	private int SpDef;
	private int Spd;
	private ArrayList<Moves> moveset = new ArrayList<Moves>();

	public Pokemon(String Name, Type type1, Type type2, int Hp, int Atk, int Def, int SpAtk, int SpDef, int Spd, ArrayList<Moves> moveset){
		this.type1 			= type1;
		this.type2 			= type2;
		this.Name 			= Name;
		this.Hp 			= Hp;
		this.Atk 			= Atk;
		this.Def 			= Def;
		this.SpAtk 			= SpAtk;
		this.SpDef 			= SpDef;
		this.Spd 			= Spd;
		this.moveset 		= moveset;
	}
	
	public String getName(){
	    return Name;
	}
	
	public void setName(String Name){
	    this.Name = Name;
	}

	public int getHp(){
		return Hp;
	}

	public void setHp(int Hp){
		this.Hp = Hp;
	}

	public int getAtk(){
		return Atk;
	}

	public void setAtk(int Atk){
		this.Atk = Atk;
	}

	public int getDef(){
		return Def;
	}

	public void setDef(int Def){
		this.Def = Def;
	}

	public int getSpAtk(){
		return SpAtk;
	}

	public void setSpAtk(int SpAtk){
		this.SpAtk = SpAtk;
	}

	public int getSpDef(){
		return SpDef;
	}

	public void setSpDef(int SpDef){
		this.SpDef = SpDef;
	}

	public int getSpd(){
		return Spd;
	}

	public void setSpd(int Spd){
		this.Spd = Spd;
	}
	
	public Type getType1(){
		return type1;
	}

	public void setType1(Type type1){
		this.type1 = type1;
	}

	public Type getType2(){
		return type2;
	}

	public void setType2(Type type2){
		this.type2 = type2;
	}

	public ArrayList<Moves> getMoveset(){
		return moveset;
	}

	public void setMoveset(){
		this.moveset = moveset;
	}

	public String Attack(Pokemon mon1, Pokemon mon2){
		return mon1.getName() + " attacked " + mon2.getName();
	}
}