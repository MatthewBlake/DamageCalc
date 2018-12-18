public class Type{
	private String typeName;
	private String typeColour;
	private double none;
	private double normal;
	private double grass;
	private double fire;
	private double water;
	private double electric;
	private double ice; 
	private double flying;
	private double bug;
	private double poison;
	private double ground;
	private double rock;
	private double fighting;
	private double psychic;
	private double ghost;
	private double dragon;
	private double dark;
	private double steel;
	private double fairy;

	public Type(String typeName, String typeColour, double none, double normal, double grass, double fire, double water, double electric, double ice, double flying, double bug, double poison, double ground, double rock, double fighting, double psychic, double ghost, double dragon, double dark, double steel, double fairy){
		this.typeName	= typeName;
		this.typeColour = typeColour;
		this.none		= none;
		this.normal		= normal;
		this.grass		= grass;
		this.fire		= fire;
		this.water		= water;
		this.electric 	= electric;
		this.ice 		= ice;
		this.flying 	= flying;
		this.bug 		= bug;
		this.poison		= poison;
		this.ground 	= ground;
		this.rock 		= rock;
		this.fighting 	= fighting;
		this.psychic 	= psychic;
		this.ghost		= ghost;
		this.dragon 	= dragon;
		this.dark		= dark;
		this.steel		= steel;
		this.fairy 		= fairy;
	}

	public String getType(){
		return typeName;
	}

	public String getColour(){
		return typeColour;
	}

	public double getNone(){
		return none;
	}

	public double getNormal(){
		return normal;
	}

	public double getGrass(){
		return grass;
	}

	public double getFire(){
		return fire;
	}

	public double getWater(){
		return water;
	}

	public double getElectric(){
		return electric;
	}

	public double getIce(){
		return ice;
	}

	public double getFlying(){
		return flying;
	}

	public double getBug(){
		return bug;
	}

	public double getPoison(){
		return poison;
	}

	public double getGround(){
		return ground;
	}

	public double getRock(){
		return rock;
	}

	public double getFighting(){
		return fighting;
	}

	public double getPsychic(){
		return psychic;
	}

	public double getGhost(){
		return ghost;
	}

	public double getDragon(){
		return dragon;
	}

	public double getDark(){
		return dark;
	}

	public double getSteel(){
		return steel;
	}

	public double getFairy(){
		return fairy;
	}
}