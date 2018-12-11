public class Type{
	private String typeName;
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

	public Type(String typeName, double none, double normal, double grass, double fire, double water, double electric, double ice, double flying, double bug, double poison, double ground, double rock, double fighting, double psychic, double ghost, double dragon, double dark, double steel, double fairy){
		this.typeName	= typeName;
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
}

/*


	private Type None 		= new Type(			Normal: 1	Grass: 1 	Fire: 1 	Water: 1 	Electric: 1 	Ice: 1 		Flying: 1 		Bug: 1 		Poison: 1 		Ground: 1 		Rock: 1 	Fighting: 1 	Psychic: 1 		Ghost: 1 	Dragon: 1 		Dark: 1		Steel: 1		Fairy: 1);
	private Type Normal 	= new Type(None: 1 	Normal: 1 	Grass: 1 	Fire: 1 	Water: 1 	Electric: 1 	Ice: 1 		Flying: 1 		Bug: 1 		Poison: 1 		Ground: 1 		Rock: 0.5 	Fighting: 1 	Psychic: 1 		Ghost: 0 	Dragon: 1 		Dark: 1 	Steel: 0.5		Fairy: 1);
	private Type Grass 		= new Type(None: 1 	Normal: 1 	Grass: 1 	Fire: 1 	Water: 1 	Electric: 1 	Ice: 1 		Flying: 1 		Bug: 1 		Poison: 1 		Ground: 1 		Rock: 0.5 	Fighting: 1 	Psychic: 1 		Ghost: 0 	Dragon: 1 		Dark: 1 	Steel: 0.5		Fairy: 1);
	private Type Fire 		= new Type(None: 1 	Normal: 1 	Grass: 1 	Fire: 1 	Water: 1 	Electric: 1 	Ice: 1 		Flying: 1 		Bug: 1 		Poison: 1 		Ground: 1 		Rock: 0.5 	Fighting: 1 	Psychic: 1 		Ghost: 0 	Dragon: 1 		Dark: 1 	Steel: 0.5		Fairy: 1);
	private Type Water 		= new Type(None: 1 	Normal: 1 	Grass: 1 	Fire: 1 	Water: 1 	Electric: 1 	Ice: 1 		Flying: 1 		Bug: 1 		Poison: 1 		Ground: 1 		Rock: 0.5 	Fighting: 1 	Psychic: 1 		Ghost: 0 	Dragon: 1 		Dark: 1 	Steel: 0.5		Fairy: 1);
	private Type Electric 	= new Type(None: 1 	Normal: 1 	Grass: 1 	Fire: 1 	Water: 1 	Electric: 1 	Ice: 1 		Flying: 1 		Bug: 1 		Poison: 1 		Ground: 1 		Rock: 0.5 	Fighting: 1 	Psychic: 1 		Ghost: 0 	Dragon: 1 		Dark: 1 	Steel: 0.5		Fairy: 1);
	private Type Ice 		= new Type(None: 1 	Normal: 1 	Grass: 1 	Fire: 1 	Water: 1 	Electric: 1 	Ice: 1 		Flying: 1 		Bug: 1 		Poison: 1 		Ground: 1 		Rock: 0.5 	Fighting: 1 	Psychic: 1 		Ghost: 0 	Dragon: 1 		Dark: 1 	Steel: 0.5		Fairy: 1);
	private Type Flying 	= new Type(None: 1 	Normal: 1 	Grass: 1 	Fire: 1 	Water: 1 	Electric: 1 	Ice: 1 		Flying: 1 		Bug: 1 		Poison: 1 		Ground: 1 		Rock: 0.5 	Fighting: 1 	Psychic: 1 		Ghost: 0 	Dragon: 1 		Dark: 1 	Steel: 0.5		Fairy: 1);
	private Type Bug 		= new Type(None: 1 	Normal: 1 	Grass: 1 	Fire: 1 	Water: 1 	Electric: 1 	Ice: 1 		Flying: 1 		Bug: 1 		Poison: 1 		Ground: 1 		Rock: 0.5 	Fighting: 1 	Psychic: 1 		Ghost: 0 	Dragon: 1 		Dark: 1 	Steel: 0.5		Fairy: 1);
	private Type Poison 	= new Type(None: 1 	Normal: 1 	Grass: 1 	Fire: 1 	Water: 1 	Electric: 1 	Ice: 1 		Flying: 1 		Bug: 1 		Poison: 1 		Ground: 1 		Rock: 0.5 	Fighting: 1 	Psychic: 1 		Ghost: 0 	Dragon: 1 		Dark: 1 	Steel: 0.5		Fairy: 1);
	private Type Ground 	= new Type(None: 1 	Normal: 1 	Grass: 1 	Fire: 1 	Water: 1 	Electric: 1 	Ice: 1 		Flying: 1 		Bug: 1 		Poison: 1 		Ground: 1 		Rock: 0.5 	Fighting: 1 	Psychic: 1 		Ghost: 0 	Dragon: 1 		Dark: 1 	Steel: 0.5		Fairy: 1);
	private Type Rock 		= new Type(None: 1 	Normal: 1 	Grass: 1 	Fire: 1 	Water: 1 	Electric: 1 	Ice: 1 		Flying: 1 		Bug: 1 		Poison: 1 		Ground: 1 		Rock: 0.5 	Fighting: 1 	Psychic: 1 		Ghost: 0 	Dragon: 1 		Dark: 1 	Steel: 0.5		Fairy: 1);
	private Type Fighting 	= new Type(None: 1 	Normal: 1 	Grass: 1 	Fire: 1 	Water: 1 	Electric: 1 	Ice: 1 		Flying: 1 		Bug: 1 		Poison: 1 		Ground: 1 		Rock: 0.5 	Fighting: 1 	Psychic: 1 		Ghost: 0 	Dragon: 1 		Dark: 1 	Steel: 0.5		Fairy: 1);
	private Type Psychic 	= new Type(None: 1 	Normal: 1 	Grass: 1 	Fire: 1 	Water: 1 	Electric: 1 	Ice: 1 		Flying: 1 		Bug: 1 		Poison: 1 		Ground: 1 		Rock: 0.5 	Fighting: 1 	Psychic: 1 		Ghost: 0 	Dragon: 1 		Dark: 1 	Steel: 0.5		Fairy: 1);
	private Type Ghost 		= new Type(None: 1 	Normal: 1 	Grass: 1 	Fire: 1 	Water: 1 	Electric: 1 	Ice: 1 		Flying: 1 		Bug: 1 		Poison: 1 		Ground: 1 		Rock: 0.5 	Fighting: 1 	Psychic: 1 		Ghost: 0 	Dragon: 1 		Dark: 1 	Steel: 0.5		Fairy: 1);
	private Type Dragon 	= new Type(None: 1 	Normal: 1 	Grass: 1 	Fire: 1 	Water: 1 	Electric: 1 	Ice: 1 		Flying: 1 		Bug: 1 		Poison: 1 		Ground: 1 		Rock: 0.5 	Fighting: 1 	Psychic: 1 		Ghost: 0 	Dragon: 1 		Dark: 1 	Steel: 0.5		Fairy: 1);	
	private Type Dark 		= new Type(None: 1 	Normal: 1 	Grass: 1 	Fire: 1 	Water: 1 	Electric: 1 	Ice: 1 		Flying: 1 		Bug: 1 		Poison: 1 		Ground: 1 		Rock: 0.5 	Fighting: 1 	Psychic: 1 		Ghost: 0 	Dragon: 1 		Dark: 1 	Steel: 0.5		Fairy: 1);
	private Type Steel 		= new Type(None: 1 	Normal: 1 	Grass: 1 	Fire: 1 	Water: 1 	Electric: 1 	Ice: 1 		Flying: 1 		Bug: 1 		Poison: 1 		Ground: 1 		Rock: 0.5 	Fighting: 1 	Psychic: 1 		Ghost: 0 	Dragon: 1 		Dark: 1 	Steel: 0.5		Fairy: 1);
	private Type Fairy 		= new Type(None: 1 	Normal: 1 	Grass: 1 	Fire: 1 	Water: 1 	Electric: 1 	Ice: 1 		Flying: 1 		Bug: 1 		Poison: 1 		Ground: 1 		Rock: 0.5 	Fighting: 1 	Psychic: 1 		Ghost: 0 	Dragon: 1 		Dark: 1 	Steel: 0.5		Fairy: 1);
	*/