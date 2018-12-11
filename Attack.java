public class Attack{
	private int Effectiveness;
	private boolean Physical;

	public String Attack(Pokemon mon1, Pokemon mon2){
		//int damage = ( ( ( 200 / 5 ) + 2 ) * pow * ( type / def ) / 50 ) * mod;
		int damage = ( ( ( 200 / 5 ) ) * 100 * ( 169 / 205 ) / 50 ) * 1;
		return mon1 + " vs " + mon2 + " ---- " + damage + " out of " + mon2.getHp() + " to " + mon2.getName();
	}
}