public class Modifier{
	private double weather;
	private double random;
	private double stab;
	private double type;
	private boolean burn = false;
	private boolean crit = false;

	public Modifier(double weather, double stab, double type, boolean burn, boolean crit){
		this.weather = weather;
		this.stab = stab;
		this.type = type;
		this.burn = burn;
		this.crit = crit;
	}

	public double getWeather(){
		return weather;
	}

	public void setWeather(double weather){
		this.weather = weather;
	}

	public double getStab(){
		return stab;
	}

	public void setStab(double stab){
		this.stab = stab;
	}

	public double getType(){
		return type;
	}

	public void setType(double stab){
		this.stab = stab;
	}

	public boolean getBurn(){
		return burn;
	}

	public void setBurn(boolean burn){
		this.burn = burn;
	}

	public boolean getCrit(){
		return crit;
	}

	public void setCrit(boolean crit){
		this.crit = crit;
	}
}